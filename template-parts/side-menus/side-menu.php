<script>
    const headings = document.querySelectorAll('.content-wrapper > h2');
    // console.log(headings);
    document.write(`
        <div class="right-menu pt-16 px-8 bg-gray-100 rounded-tl-[5rem] min-h-96 sticky top-[200px] min-h-[60vh]">
            <h3 class="font-black text-xl text-mrct-navy-light">On this page</h3>
            <ul class="side-menu">
    `);
            headings.forEach((e) => {
                // console.log(e.getAttribute('id'))
                // console.log(e.innerText)
                document.write(`
                <li class="py-1 border-b-2 border-transparent hover:border-mrct-orange hover:text-mrct-orange text-mrct-navy-light font-semibold">
                    <a href="#${e.getAttribute('id')}">${e.innerText}</a>
                </li>`) ;
            });
    document.write(`
            </ul>
        </div>
    `)
        
    
</script>
