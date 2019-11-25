''' Javascript Object Notation'''
# OBJECTIVE: Read external file, delete record and save in external file
# Reference: https://youtu.be/9N6a-VLBa2I
# input: states.json
# output: new_states.json
#

import json

# Upload the file state.json from the same directory
with open('states.json') as f:
    data = json.load(f)

for state in data['states']:
    # Print all records
    # print(state)

    # Print name and abbreviation
    print(state['name'], state['abbreviation'])
    # Delete from area_codes
    del state['area_codes']

# Write out at the python in a new file
with open('new_states.json', 'w') as f:
    json.dump(data, f, indent =2 )
