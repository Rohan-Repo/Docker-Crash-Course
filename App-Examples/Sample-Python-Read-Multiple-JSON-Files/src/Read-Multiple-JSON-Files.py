from pathlib import Path
import json

for fileInPath in Path('Data/').glob('*.json'):
    # Make Sure JSON File is present
    if fileInPath:
        print( 'For : ', fileInPath.name, ' - JSON Data is \n' )
        
        # Convert JSON String into JSON Object
        # print( type( fileInPath.read_text() ) )
        jsonData = json.loads( fileInPath.read_text() )
        print( jsonData )