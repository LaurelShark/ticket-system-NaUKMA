ticket_list = []

function loadList()
{
    loadRooms();
    var ticket0 = new Ticket();
    ticket0.date = new Date(2018, 9, 25, 13, 0, 0, 0); ticket0.room = locations[0].rooms[0];
    var ticket1 = new Ticket();
    ticket1.date = new Date(2018, 9, 27, 11, 20, 0, 0); ticket1.room = locations[0].rooms[1];
    var ticket2 = new Ticket();
    ticket2.date = new Date(2018, 9, 26, 9, 0, 0, 0); ticket2.room = locations[1].rooms[0];

    ticket_list.push(ticket0, ticket1, ticket2);
}

function updateList()
{
    console.log(locations);
    //First we clear all the children elements
    var list_elem = document.getElementById("ticket-list");
    while (list_elem.firstChild)
    {
        list_elem.removeChild(list_elem.firstChild);
    }

    for (var i = 0; i < ticket_list.length; i++)
    {
        var panel = document.createElement("div");
        panel.className = "panel panel-default"

        var panel_header = document.createElement("div");
        panel_header.className = "panel-heading main-color-bg"
        panel_header.innerHTML = ticket_list[i].date;

        var panel_body = document.createElement("div");
        panel_body.className = "panel-body"
        panel_body.innerHTML = "Аудиторія - " + ticket_list[i].room.name;
        
        panel.appendChild(panel_header);
        panel.appendChild(panel_body);
        list_elem.appendChild(panel);
    }
}