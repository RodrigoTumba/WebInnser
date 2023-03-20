const toggleMenuOpen = () => document.body.classList.toggle("open");
 
const numero1=document.getElementById('numero1');
let cantidad1=0
let tiempo1=setInterval(() => {
    cantidad1+=1
    numero1.textContent=cantidad1
    if(cantidad1===1000)
    {
        clearInterval(tiempo1)
    }

}, 2);

const numero2=document.getElementById('numero2');
let cantidad2=0

let tiempo2=setInterval(() => {
    cantidad2+=1
    numero2.textContent=cantidad2
    if(cantidad2===400)
    {
        clearInterval(tiempo2)
    }
}, 4);


const numero3=document.getElementById('numero3');
let cantidad3=0

let tiempo3=setInterval(() => {
    cantidad3+=1
    numero3.textContent=cantidad3
    if(cantidad3===200)
    {
        clearInterval(tiempo3)
    }
}, 8);

const numero4=document.getElementById('numero4');
let cantidad4=0

let tiempo4=setInterval(() => {
    cantidad4+=1
    numero4.textContent=cantidad4
    
    if(cantidad4===20)
    {
        clearInterval(tiempo4)
    }
    

}, 20);

window.onscroll=function(){
    if(document.documentElement.scrollTop > 950){
        document.querySelector('.go-top-container')
        .classList.add('show');
    }else{
        document.querySelector('.go-top-container')
        .classList.remove('show');
    }
}

document.querySelector('.go-top-container').addEventListener('click',()=>{
    window.scrollTo({
        top:0,
        behavior:'smooth'
    })
});


const fila = document.querySelector('.contenedor-carousel');
const peliculas = document.querySelectorAll('.pelicula');

const flechaIzquierda = document.getElementById('flecha-izquierda');
const flechaDerecha = document.getElementById('flecha-derecha');

// ? ----- ----- Event Listener para la flecha derecha. ----- -----
flechaDerecha.addEventListener('click', () => {
	fila.scrollLeft += fila.offsetWidth;

	const indicadorActivo = document.querySelector('.indicadores .activo');
	if(indicadorActivo.nextSibling){
		indicadorActivo.nextSibling.classList.add('activo');
		indicadorActivo.classList.remove('activo');
	}
});

// ? ----- ----- Event Listener para la flecha izquierda. ----- -----
flechaIzquierda.addEventListener('click', () => {
	fila.scrollLeft -= fila.offsetWidth;

	const indicadorActivo = document.querySelector('.indicadores .activo');
	if(indicadorActivo.previousSibling){
		indicadorActivo.previousSibling.classList.add('activo');
		indicadorActivo.classList.remove('activo');
	}
});

// ? ----- ----- Paginacion ----- -----
const numeroPaginas = Math.ceil(peliculas.length / 5);
for(let i = 0; i < numeroPaginas; i++){
	const indicador = document.createElement('button');

	if(i === 0){
		indicador.classList.add('activo');
	}

	document.querySelector('.indicadores').appendChild(indicador);
	indicador.addEventListener('click', (e) => {
		fila.scrollLeft = i * fila.offsetWidth;

		document.querySelector('.indicadores .activo').classList.remove('activo');
		e.target.classList.add('activo');
	});
}

// ? ----- ----- Hover ----- -----
peliculas.forEach((pelicula) => {
	pelicula.addEventListener('mouseenter', (e) => {
		const elemento = e.currentTarget;
		setTimeout(() => {
			peliculas.forEach(pelicula => pelicula.classList.remove('hover'));
			elemento.classList.add('hover');
		}, 300);
	});
});

fila.addEventListener('mouseleave', () => {
	peliculas.forEach(pelicula => pelicula.classList.remove('hover'));
});