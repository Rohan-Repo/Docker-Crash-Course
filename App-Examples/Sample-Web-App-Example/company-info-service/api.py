from flask import Flask, jsonify
import json

import os


app = Flask(__name__)

@app.route('/', methods=['GET'])
def getFileSystemInfo():
    cwd = os.getcwd()  # Get the current working directory (cwd)
    files = os.listdir(cwd)  # Get all the files in that directory
    print("Files in %r: %s" % (cwd, files))
    files.append( cwd )

    return files

@app.route('/api/companies', methods=['GET'])
def getCompanyInfo():
    # Read JSON Data 
    with open('Data/companies.json') as jsonFile:
        parsedJSON = json.load( jsonFile )
        print( 'Value : ', parsedJSON, '\n' )
        
        # Convert to JSON and send to Front-End
        return jsonify( parsedJSON )
    
if __name__ == "__main__":
    app.run( debug=False )
    # app.run( host='0.0.0.0', port=5000, debug=False )