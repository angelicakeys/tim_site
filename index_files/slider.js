(function(){
	/* Idntifier la collection de carrousel */
		let carrousel = document.querySelectorAll('.carrousel-2')
		let ctrlCarrousel = document.querySelectorAll('.ctrl-carrousel')
		let noCtrlCarrousel = 0;
		for (const elmCarrousel of carrousel)
		{
			let bout = ctrlCarrousel[noCtrlCarrousel++].querySelectorAll('.rad-carrousel')
			//noCtrlCarrousel = noCtrlCarrousel +1;
			console.log(bout.length)

			let k =0;
			bout[0].checked = true;
			for (const bt of bout)
			{
				bt.value = k++;
			
				console.log(bt.value)
				bt.addEventListener('mousedown', function() {
					elmCarrousel.style.transform = "translateX(" + (-this.value*100) + "vw)"
					console.log(elmCarrousel.style.transform)
				})

			}
		}	
}())	