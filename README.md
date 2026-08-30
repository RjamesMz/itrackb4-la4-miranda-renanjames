Self Assesment Questions

Q1 Explain the order you placed your featured route and your detail route in, and what would happen if you swapped them.

A1 The order of my routes are the featured route should always be at the top od the detail route, if the detail route and featured route are swaped the word "feature" would be considered as a real data that will be fed to the {id} parameter because there is no contraint wether the id should be integer or string, so the result will be a 404 page Not found because the controller would scan the data source and find the id "featured" which is not existing.

Q2 What happens when someone visits an id that does not exist in your data, and what did you write to make that happen?

A2 When someone puts a random number that is non existent in my data source it would be flagged by the controller and sent to a 404 not found page, we wrote a guard clause where if a data does not exits it will run a helper that diplays the 404 not found page or "abort(404)" 

Q3 Why do your links use route names instead of typed URLs? Give one concrete thing that would break if they did not.

A3 Route names are better than hard coded url. Route names makes changing the url pattern easier, rather than changing each hardcoded url you would only need to change the url pattern and the route stil works. Its like remembering the place like "Plaza" instead of memorizing the complete address, so if the address of the place change the "name" is still the same
