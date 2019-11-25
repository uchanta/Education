# Using json (loads/dumps) and examples of objects vs dictionary

import json

people_string = '''
    {
       "people": [
           {
                "name": "John Smidth",
                "phone": "615-555-7164",
                "emails": ["johnsmith@boguseemail.com", "john.smith@work-place.com"],
                "has_license": false
           },
           {
                "name": "Jane Doe",
                "phone": "560-555-5153",
                "emails": null,
                "has_license": true
           }
        ]
    }
'''

data = json.loads(people_string)
print(data,'\n')

#3 Print name of persons in dictinary
for person in data['people']:
    del person['phone']
print(data,'\n')

# Now delete form the objet
# To dente the paragraph indent = 2
mew_string = json.dumps(data, indent = 2, sort_keys=True)
print(mew_string,'\n')

# To dente the paragraph ident = 2

# #3 Print name of persons in dictinary
# for person in data['people']:
#     print(person['name'],'\n')
#
# #2 Person dictionary
# for person in data['people','\n']:
#     print(person)
#
# #1 Print screen
# print(data,'\n')