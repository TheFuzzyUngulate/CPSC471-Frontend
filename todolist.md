# CPSC471 Project
## To-Do list (delete once done)

##### Back end
- Create starter database (Done?)
- Handle query listing by address (Done)
- Handle query listing by location (city, province, country) (Done)
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
- Create main page (Done)
- Add buy button (Scrapped in favor of having search bar)
	* Navigate to buy page (Done)
	* Display search bar (Done)
	* Search bar should support address and location check (Done)
	* Forward to search results page (Done)
		* If listings found, then display all fitting listings (Done)
		* Search results page contains information on the listing (Done)
		* Else, return a message indicating that no listings were found (Scrapped)
- Create search results page (Done)
	* For each listing, get all attributes (Done)
	* Add a "buy" button (Done)
	* Add a "view images" button (Scrapped)
- Add sell button
	* Navigate to sell page (Done)
	* Ask for listing information (Done)
	* Receive given listing information
		* Information should not go directly to a database, but to a pending listings document (JSON?)
		* Admin can approve items herein, could tick a flag
	* Listing agent handles it by addin
