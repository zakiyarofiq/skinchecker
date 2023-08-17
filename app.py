from flask import Flask, render_template, request, send_from_directory, redirect
from tensorflow.keras.models import load_model
import h5py
import numpy as np
from PIL import Image
import os

app = Flask(__name__)
model = None

# Load the CNN model during application startup
def load_cnn_model():
    global model
    model = load_model('xception_aug.weights.best.hdf5')
    model.make_predict_function()  # Initialize the model for a different thread

# Create a temporary directory if it doesn't exist
def create_temp_directory():
    if not os.path.exists('temp'):
        os.makedirs('temp')

@app.route('/')
def index():
    return render_template('index.html')

@app.route('/process', methods=['POST'])
def process():
    # Process the uploaded image
    create_temp_directory()  # Create the temporary directory if it doesn't exist
    
    # Remove any existing image in the temporary directory
    existing_files = os.listdir('temp')
    for file_name in existing_files:
        file_path = os.path.join('temp', file_name)
        os.remove(file_path)
        
    file = request.files['file']
    img_path = os.path.join('temp', file.filename)  # Path to save the temporary image
    file.save(img_path)
    
    img = Image.open(file)
    img = img.resize((224, 224))  # Resize the image according to the model's requirements

    # Preprocess the image
    img_array = np.array(img)
    img_array = img_array / 255.0
    img_array = np.expand_dims(img_array, axis=0)

    # Perform prediction using the CNN model
    result = model.predict(img_array)
    
    # Define class labels
    class_labels = ['Eksim', 'Psoriasis', 'Scabies']
    
    # Get the index of the class with the highest probability
    predicted_class_index = np.argmax(result)
    
    # Get the predicted class label
    predicted_class = class_labels[predicted_class_index]

    predicted_prob = result[0][predicted_class_index]
    
    # Pass the image URL to the result.html template

    # Generate the URL with query parameters
    query_params = {
        'result': predicted_class,
        'probability': predicted_prob,
        'image': file.filename
    }
    url = 'http://localhost/skinchecker/result/?' + '&'.join([f'{key}={value}' for key, value in query_params.items()])

    # Redirect to the generated URL
    return redirect(url)

# Serve static images from the temp directory
@app.route('/temp/<path:filename>')
def serve_temp(filename):
    return send_from_directory('temp', filename)

if __name__ == '__main__':
    load_cnn_model()  # Load the model during application startup
    app.run(debug=True)