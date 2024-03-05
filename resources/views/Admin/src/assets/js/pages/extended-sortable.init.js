var gridDemo = document.getElementById('gridDemo'),

    moveLeft = document.getElementById('move-left'),
    moveRight = document.getElementById('move-right'),

    moveHandleRight = document.getElementById('moveHandle-right'),
    moveHandleLeft = document.getElementById('moveHandle-left'),

    example1 = document.getElementById('example1'),

    example2Left = document.getElementById('example2-left'),
    example2Right = document.getElementById('example2-right'),

    example3Left = document.getElementById('example3-left'),
    example3Right = document.getElementById('example3-right'),

    example4 = document.getElementById('example4');

// Grid demo
new Sortable(gridDemo, {
    animation: 150,
    ghostClass: 'bg-primary/10'
});
