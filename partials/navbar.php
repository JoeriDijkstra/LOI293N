<style>
    body {
        margin: 0;
    }

    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #000;
    }

    li {
        float: left;
    }

    li a,
    .dropbtn {
        display: inline-block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    li a:hover,
    .dropdown:hover .dropbtn {
        background-color: #3498db;
    }

    li.dropdown {
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
    }

    .dropdown-content a:hover {
        background-color: #3498db;
        color: #fff;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }
</style>

<ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="ledenlijst.php">Leden</a></li>
    <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">Database</a>
        <div class="dropdown-content">
            <a href="postcode.php">Add Postcode</a>
            <a href="schoon.php">Clear Leden</a>
        </div>
    </li>
</ul>