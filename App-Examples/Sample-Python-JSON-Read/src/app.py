print( 'Starting the BackEnd Code \n' )

# Code to Read JSON File
with open('Data/companies.json') as jsonFile:
    fileData = jsonFile.read()
    print( 'JSON Data is : \n ')
    print( fileData )

print( '\n Ending the BackEnd Code' )
