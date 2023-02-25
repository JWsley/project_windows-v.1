class Item extends HTMLElement{

    constructor(){
        super();
        const shadow = this.attachShadow({mode:"open"});

        shadow.appendChild(this.build());
        shadow.appendChild(this.styles());
    }
    
    build(){
        const item = document.createElement('div');
        item.setAttribute('class','item');
        item.setAttribute('id','item');
        

        const icon = document.createElement('img');
        icon.setAttribute('class','icon');
        icon.src = (this.getAttribute('icon')|| 'https://cdn-icons-png.flaticon.com/512/2889/2889314.png');

        item.appendChild(icon);

        const name = document.createElement('span');
        name.setAttribute('class','name');
        name.textContent = (this.getAttribute('name') || 'Nova Pasta');
        item.appendChild(name);


        return item;

    }
    styles(){
        const style = document.createElement('style');
        style.textContent = `
        


.item{
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: center;
    height: 80px;
    width: 80px;
    gap:5px;
    padding-top:5px;
    cursor: pointer;
    transition:.4s;


}.item:hover{
    background: rgba(255,255,255,0.5);
    transition:.4s;

}


.name{
    color: white;
    font-size: 12px;
}

.icon{
    height:50px;
    width:40px;
}
        `
        return style
    }
    
}
customElements.define('item-box',Item);
