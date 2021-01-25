var listElement = document.querySelector('.list ul');


var itens = [
    {
        'nome':'jogo de prato',
        'quant':'01',
        'brands':'tramontina',
        'unit':'cx'
    },
    {
        'nome':'jogo de prato',
        'quant':'01',
        'brands':'tramontina',
        'unit':'cx'
    },
    {
        'nome':'jogo de prato',
        'quant':'01',
        'brands':'Duralex',
        'unit':'cx'
    },
    {
        'nome':'jogo de copo',
        'quant':'02',
        'brands':'Duralex',
        'unit':'cx'
    },
    {
        'nome':'jogo de copo',
        'quant':'02',
        'brands':'Duralex',
        'unit':'cx'
    },
    {
        'nome':'jogo de copo',
        'quant':'02',
        'brands':'Duralex',
        'unit':'cx'
    },
    {
        'nome':'jogo de copo',
        'quant':'02',
        'brands':'Duralex',
        'unit':'cx'
    },
];


// function renderItens(){
//     for(item of itens){
         
//     var itemElement = document.createElement('li')
//     itemElement.className = "item";

//         var unitElement = document.createElement('span');
//         unitElement.className = 'unit';
//         var unitText = document.createTextNode(item.unit);
//         unitElement.appendChild(unitText);
        
//         var quantElement = document.createElement('p');
//         quantElement.className = 'quant';
//         var quantText = document.createTextNode(item.quant);
//         quantElement.appendChild(quantText);
//         quantElement.appendChild(unitElement);
        
        

//          var nameElement = document.createElement('p');
//          nameElement.className = "name-item";
//          var nameText = document.createTextNode(item.nome);
//          nameElement.appendChild(nameText);

//          var brandElement = document.createElement('p');
//          var brandText = document.createTextNode(item.brands);
//          brandElement.appendChild(brandText);

//          itemElement.appendChild(quantElement);
//          itemElement.appendChild(nameElement);
//          itemElement.appendChild(brandElement);
        
//          listElement.appendChild(itemElement);

//     }

    initialize = () => {
        itens.map(val =>{
            listElement.innerHTML+=`
            <li class="item">
            <p class="quant">${val.quant}<span class="unit">${val.unit}</span></p>
            <p class="name-item">${val.nome}</p>
            <p class="brands-item">${val.brands}</p>

            <div class="edit">
                <a href="#"><i class="far fa-edit"></i></a>
                <a href="#"><i class="fas fa-trash"></i></a>
            </div>
        </li>
            `
        } )
    }

    initialize();


    window.onload = function(e) {
        var offset = document.getElementsByClassName('search')[0].offsetTop;
        var addFIxed = document.querySelector('.list .add.fixed');
    
        document.addEventListener('scroll', function() {
            if (document.body.scrollTop > offset || document.documentElement.scrollTop > offset) {
                addFIxed.style.display =   'initial';
            } else {
                addFIxed.style.display =   'none';
            }
        });
    }
// document.addEventListener("DOMContentLoaded", renderItens);