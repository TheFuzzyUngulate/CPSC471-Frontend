# CPSC471 Project
## To-Do list (delete once done)

##### Back end
- Create starter database [Y]
- Handle query listing by address
- Handle query listing by location (city, province, country)
- Handling pending listings
- Handling pending approved listings
- Handle approved listing creation
- Handle auction creation
- Handle auction bidding record
- Handle payment approval check
- Handle buyer agent query
- Handle adding agents
- Handle showing scheduling

##### Front end
- Create main page
- Add buy button
	* Navigate to buy page
	* Display search bar
	* Search bar should support address and location check
	* If valid listing found, should forward to search results page
		* Search results page contains information on the listing
	* Else, return a message indicating that no listings were found
- Create search results page
	* For each listing, get all attributes
	* Add a "buy" button
	* Add a "view images" button
- Add sell button
	* Navigate to sell page
	* Ask for listing information
	* Receive given listing information
		* Information should not go directly to a database, but to a pending listings document (JSON?)
		* Admin can approve items herein, could tick a flag
	* Listing agent handles it by addin
