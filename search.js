const input = document.getElementById('searchplace');
const search = document.getElementById('searchbutton');
const names = document.querySelectorAll('.sn');
const kinds = document.querySelectorAll('.kind');

search.onclick = srh;

function srh(e) {
   e.preventDefault();
   data = input.value;

   let index = 0;
    for (const i of names) {
        i.classList.remove('yes');
        if (i.innerHTML.includes(data)){
           i.classList.add('yes');
        }
        else{
            console.log("fail");
        }
        index++;
    }
    let ind = 0;
    for (const i of kinds) {
        i.classList.remove('yes');
        if (i.innerHTML.includes(data)){
           i.classList.add('yes');
        }
        else{
            console.log("fail");
        }
        index++;
    }

}