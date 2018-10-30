function openNewWindow() {
    var web = open('', '_blank', 'width=600, height=300');
    web.document.write("<button onclick='window.close()'>Close</button>");
}