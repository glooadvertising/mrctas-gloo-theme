<form action="/" method="get" onsubmit="emptyText()">
	<label for="search">
	<input type="text" name="s" id="search" autocomplete="off" value="<?php the_search_query(); ?>" placeholder="Search" class="bg-transparent text-mrct-navy-light font-bold placeholder:font-normal placeholder:text-mrct-navy-light w-14 focus-visible:outline-none focus-visible:placeholder:text-gray-300 focus-visible:border-b-[1px] focus-visible:w-36 focus-visible:transition-all transition-all" />
</form>