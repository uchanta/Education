#''' Javascript Object Notation'''
# OBJECTIVE: Money conversion rate
# Reference: https://youtu.be/9N6a-VLBa2I
# input: swebpage
# output: usd money exchange
#

import json
from urllib.request import urlopen

# urllib.error.HTTPError: HTTP Error 404: Not Found: URL DOESN'T EXIST JET
with urlopen("https://finance.yahoo.com/webservice/v1/symbols/allcurrencies/quote?format=json") as response:
    source = response.read()

data = json.loads(source)

# print(json.dumps(data, indent=2))

usd_rates = dict()

for item in data['list']['resources']:
    name = item['resource']['fields']['name']
    price = item['resource']['fields']['price']
    usd_rates[name] = price

print(50 * float(usd_rates['USD/INR']))