var locations = [];
var selected_location = 0;

function loadRooms()
{
    //TODO: proper loading
    var loc0 = new Location(); loc0.name = "корпус 3";
    var loc1 = new Location(); loc1.name = "корпус 1";
    var loc2 = new Location(); loc2.name = "корпус 6";
    var loc3 = new Location(); loc3.name = "КМЦ";
    var room0 = new Room(); room0.name = "310"; room0.num_of_seats = 40; room0.specs = "має комп'ютери та проектор";
    var room1 = new Room(); room1.name = "308"; room1.num_of_seats = 16; room1.specs = "має комп'ютери";
    var room2 = new Room(); room2.name = "225"; room2.num_of_seats = 30; room2.specs = "має проектор";
    var room3 = new Room(); room3.name = "302"; room3.num_of_seats = 25; room3.specs = "";
    var room4 = new Room(); room4.name = "410"; room4.num_of_seats = 25; room4.specs = "має проектор та аудіо-обладнання";
    var room5 = new Room(); room5.name = "106"; room5.num_of_seats = 26; room5.specs = "має аудіо-обладнання";
    var room6 = new Room(); room6.name = "актовий зал"; room6.num_of_seats = 250; room6.specs = "просторий";
    var room7 = new Room(); room7.name = "228"; room7.num_of_seats = 24; room7.specs = "";
    var room8 = new Room(); room8.name = "125"; room8.num_of_seats = 15; room8.specs = "";
    
    loc0.rooms.push(room0, room1, room2);
    loc1.rooms.push(room3, room4);
    loc2.rooms.push(room5, room7, room8);
    loc3.rooms.push(room6);
    locations.push(loc0, loc1, loc2, loc3);
    console.log(locations);
}

function updateList()
{
    //Clear all the elements first!
    var tabcontent = document.getElementById("content_tab");
    var sidebar = document.getElementById("corp_tab");
    while (tabcontent.firstChild) 
    {
        tabcontent.removeChild(tabcontent.firstChild);
    }
    while (sidebar.firstChild)
    {
        sidebar.removeChild(sidebar.firstChild);
    }
    
    var search_string = document.getElementById('search_text').value;
    var num_to_search = document.getElementById('num_of_seats').value;
    var pred = document.getElementById('pred').value;

    if (num_to_search == undefined) { num_to_search = "-1"; pred = "more" };
    var valid_rooms = checkRooms(search_string, parseInt(num_to_search), pred == "more")

    if (valid_rooms.length > 0)
    {
        //Create list of rooms and add it to tabcontent
        for (var i = 0; i < valid_rooms.length; i++)
        {
            var temp_button = document.createElement("button");
            temp_button.className = "btn tab_button";
            temp_button.setAttribute('onclick',  'openTab(event, '+i+');');
            temp_button.innerHTML = valid_rooms[i].name;

            var temp_tab = document.createElement("div");
            temp_tab.className = "tab_content"
            temp_tab.setAttribute('id', 'list#' + i);

            for (var j = 0; j < valid_rooms[i].rooms.length; j++)
            {
                var temp_room = document.createElement("button");
                temp_room.className = "btn room_button";
                temp_room.setAttribute('onclick',  'openRoom(event, '+j+');');
                temp_room.innerHTML = valid_rooms[i].rooms[j].name;
                temp_tab.appendChild(temp_room);
            }

            tabcontent.appendChild(temp_tab);
            sidebar.appendChild(temp_button);
        }
    }
    else
    {
        var oops = document.createElement("label");
        oops.innerHTML = "Нічого не знайдено :(";
        tabcontent.appendChild(oops);
    }
}

function checkRooms(string, num, pred)
{
    var result = []

    var checkRoom = function(room)
    {
        return ((room.name == string) || (room.specs.search(string) >= 0) 
        && ((room.num_of_seats > num) && pred) || ((room.num_of_seats < num) && !pred));
    }

    for (var i = 0; i < locations.length; i++)
    {
        var temp_result = [];
        if (string != "" || num>0)
        {
            temp_result = locations[i].rooms.filter(checkRoom);
        }
        else
        {
            temp_result = locations[i].rooms;
        }
        var temp_location = new Location();
        temp_location.name = locations[i].name;
        
        if (temp_result.length > 0)
            {
                temp_location.rooms = temp_result;
                result.push(temp_location);
            }
    }
    
    return result;
}

function openTab(evt, tab_num) 
{
    //First, hide current elements
    var tab_content = document.getElementById("content_tab")
    for (var i = 0; i < tab_content.childNodes.length; i++)
    {
        tab_content.childNodes[i].style.display = "none";
    }
    var temp_tab = document.getElementById("list#" + tab_num);
    temp_tab.style.display = "block";
    selected_location = tab_num;
}

function openTabLink(evt, tabName) 
{
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tab_link_content");
    for (i = 0; i < tabcontent.length; i++) 
	{
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tab_link");
    for (i = 0; i < tablinks.length; i++) 
	{
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the link that opened the tab
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}