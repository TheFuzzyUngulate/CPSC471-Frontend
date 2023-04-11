
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../main.css">
    <link rel="stylesheet" href="../listings.css">
    <link rel="stylesheet" href="../listing_result.css">
</head>
<body>
    <div class="primary-header">
        <nav class="grid-container">
            <div class="gridblock header-seller-options left-elem">
                <a href="/search">Search</a>
                <a href="/contact-agent">Contact an Agent</a>
                <a href="/home">Homepage</a>
            </div>
            <div class="gridblock user-perms right-elem">
                <a href="/admin-login">Admin</a>
                <a href="/agent-login">Agent</a>
                <a href="/login">User</a>
            </div>
        </nav>
    </div>
    <div class="listingdisplay-holder">
        <div class="listingdisplay-body">   
            <div class="listingdisplay-image-div">
                <div class="listingdisplay-image-left" onclick="goleft()">
                    <img src="../project-icons/leftarrow.png">
                </div>
                <div class="listingdisplay-image-holder" data-currindex=0><img src="../images/471 Database Street - 1.jpg"><img src="../images/471 Database Street - 2.jpg"><img src="../images/471 Database Street - 3.jpg"><img src="../images/471 Database Street - 4.jpg"><img src="../images/471 Database Street - 5.jpg"><img src="../images/471 Database Street - 6.jpg"></div>
                <div class="listingdisplay-image-right" onclick="goright()">
                    <img src="../project-icons/rightarrow.png">
                </div>
            </div>
            <div class="listingdisplay-body-header">
                <div class="listingaddressinfo">
                    <h1>$123456.00</h1>
                    <p>471 Database Street NE<br>Vancouver, BC, Canada; A2B3C1</p>
                </div>
                <form class="listingbuybutton" action="">
                    <input type="hidden" name="json-value" value= "">
                    <button type="submit">buy listing</button>
                </form>
            </div>
            <table><tbody>
                <td>2 bedroom</td>
                <td>2 sq. feet</td>
                <td>2500 bathrooms</td>
                <td>2 bathrooms</td>
            </tbody></table>
        </div>
    </div>
    <script>
        var slideholder = document.getElementsByClassName("listingdisplay-image-holder")[0];
        var slideindex = 0;
        var slidelist = slideholder.getElementsByTagName("img");
        var photocount = slidelist.length;
        
        // initialization
        slidelist[0].classList.add("current");

        function goright() {
            move_slideshow(slideindex = (slideindex + 1) % photocount);
        }

        function goleft() {
            move_slideshow(slideindex = (slideindex - 1) % photocount);
        }

        function move_slideshow(index) {
            if (photocount == 0) return;
            for (var slide of slidelist) {
                slide.classList.remove("current");
            }
            slidelist[index].classList.add("current");
        }
    </script>
</body>
</html>        
        