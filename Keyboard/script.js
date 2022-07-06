const keys = [..."ABCDEFGHIJKLMNOPQRSTUVWXYZ"];
const timestamps = [];
timestamps.unshift(getTimestamp());

function getRandomNumber(min, max){
	min = Math.ceil(min);
	max = Math.floor(max);
	return Math.floor(Math.random() * (max - min + 1)) + min;
}

function getRandomKey(){
	return keys[getRandomNumber(0, keys.length-1)]
}

function targetRandomKey(){
	const key = document.getElementById(getRandomKey());
	key.classList.add("selected");
	let start = Date.now();
}

function getTimestamp(){
	return Math.floor(Date.now() / 1000)
}

document.addEventListener("keyup", event => {
	var score = 0;
	const keyPressed = String.fromCharCode(event.keyCode);
	const keyElement = document.getElementById(keyPressed);
	const highlightedKey = document.querySelector(".selected");
	
	keyElement.classList.add("hit")
	keyElement.addEventListener("animationend", () =>  {
		keyElement.classList.remove("hit")
	})
	
	if (keyPressed === highlightedKey.innerHTML) {
		timestamps.unshift(getTimestamp());
		const elapsedTime = timestamps[0] - timestamps[1];
		console.log(`Character per minute ${60.0/elapsedTime}`)
		highlightedKey.classList.remove("selected");

		score += 20;
		("#score").html(score);

		targetRandomKey();
	}
})

targetRandomKey();