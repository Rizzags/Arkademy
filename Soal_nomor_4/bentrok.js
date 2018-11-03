function bentrok(a,b){

	console.log("==========================")
	var jml_hari = 365;
	for (var i = a; i < jml_hari; i = i + a) {
			for (var j = b; j < jml_hari; j = j + b) {
				if (i == j) {
					// console.log("ok");					
					console.log(i);					
					return false;
				}

			}
	}


}

bentrok(4,6);