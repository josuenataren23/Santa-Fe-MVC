let whereis = window.location.href;

if (whereis.includes('Controller=Home&action=Index')) {
    document.getElementById('locate1').classList.add('md:text-amber-300','relative', "before:content-['']", 'before:absolute', 'before:-bottom-5/6', 
'before:left-0', 'before:h-0.75', 'before:w-full', 'before:bg-amber-300','before:rounded-t-full');
}
if (whereis.includes('Controller=Ubicacion&action=Index')) {
    document.getElementById('locate2').classList.add('md:text-amber-300','relative', "before:content-['']", 'before:absolute', 'before:-bottom-5/6', 
'before:left-0', 'before:h-0.75', 'before:w-full', 'before:bg-amber-300','before:rounded-t-full');
}
if (whereis.includes('Controller=Contacto&action=Index')) {
    document.getElementById('locate3').classList.add('md:text-amber-300','relative', "before:content-['']", 'before:absolute', 'before:-bottom-5/6', 
'before:left-0', 'before:h-0.75', 'before:w-full', 'before:bg-amber-300','before:rounded-t-full');
}
if (whereis.includes('Controller=Menu&action=Index')) {
    document.getElementById('locate4').classList.add('md:text-amber-300','relative', "before:content-['']", 'before:absolute', 'before:-bottom-5/6', 
'before:left-0', 'before:h-0.75', 'before:w-full', 'before:bg-amber-300','before:rounded-t-full');
}
if (whereis.includes('Controller=Reservar&action=Index')) {
    document.getElementById('locate5').classList.add('md:text-amber-300','relative', "before:content-['']", 'before:absolute', 'before:-bottom-5/6', 
'before:left-0', 'before:h-0.75', 'before:w-full', 'before:bg-amber-300','before:rounded-t-full');
}