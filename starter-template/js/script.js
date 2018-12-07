function AfficheEleve(idC){
    var xhr = new XMLHttpRequest(); 
        xhr.open("GET", "php/ajax/afficheEleve.php?id="+ idC);
        
        xhr.onreadystatechange = function(){
            if (xhr.readyState == 4 && xhr.status == 200){
                document.getElementById('Liste').innerHTML = xhr.responseText;
            }
        }
        xhr.send()
}


function RetranscrisNote(num){
    if(num>=15){
        num = num *2;
    }else if(num == 20){
        num = 50;
    }else if(num<15 && num>=10){
        num = num;
    }else if(num<10 && num>=5){
        num = 0;
    }else{
        num = -20;
    }
    document.getElementById('nbpt').value = num;
}