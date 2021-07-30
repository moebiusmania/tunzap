var msg = [
	{
		"testo": "Bella raga",
		"nome": "Salvo"
	},
	{
		"testo": "Tutto rego",
		"nome": "Mosche"
	},
	{
		"testo": "Prova prova prova",
		"nome": "Gigio"
	},
];


function ctrlMessaggi($scope){
	$scope.msg = msg;

	$scope.utente = "Salvo";

	$scope.scrivi = function(){
		$scope.msg.push({"testo":$scope.testoIn,"nome":$scope.utente});
		$scope.testoIn = '';
		var contenitore = document.querySelector('.messaggi');
		contenitore.scrollTop = contenitore.scrollHeight;
	}
}