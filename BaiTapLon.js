
var search=document.getElementById("search");
var dissearch=document.getElementById('div-search');
var exit=document.getElementById('exit-search');

search.addEventListener('click' , function(e){
    dissearch.classList.toggle('delete-search');
    e.preventDefault();
})
exit.addEventListener('click', function(e){
    dissearch.classList.add('delete-search');
    e.preventDefault();
})
