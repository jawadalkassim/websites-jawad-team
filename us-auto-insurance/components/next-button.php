<?php
if($brand == 'father_cashmas'){
?>

<div class="p-4 mx-auto max-w-sm text-center">
	<button type="button" class="flex items-center justify-center bg-green-600 text-white py-4 px-4 font-bold rounded-full w-full text-white text-2xl md:text-3xl font-bold shadow-lg shadow-green-600/50 hover:shadow-green-600/50" data-action="next-step">
		Next
		<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ml-1 md:w-8 md:h-8">
			<path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
		</svg>
	</button>
</div>

<?php
} else {
?>

<div class="p-4 mx-auto max-w-sm text-center">
	<button type="button" class="flex items-center justify-center bg-blue-500 text-white py-4 px-4 font-bold rounded-full w-full text-white text-2xl md:text-3xl font-bold shadow-lg shadow-blue-500/50 hover:shadow-blue-500/50" data-action="next-step">
		Next
		<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ml-1 md:w-8 md:h-8">
			<path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
		</svg>
	</button>
</div>

<?php
}
?>