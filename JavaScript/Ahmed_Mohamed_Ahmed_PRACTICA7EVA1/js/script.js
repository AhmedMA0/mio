document.write("<table>");

for(let a = 0; a < 10; a++){
    document.write("<tr>");

    for (let i = 0; i < 10; i++) {
       document.write("<td>"+a+i+"</td>");
        
    }

    document.write("</tr>");
}

document.write("</table>");