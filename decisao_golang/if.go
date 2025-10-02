package main

import "fmt"

func main() {
	fmt.Println("Testando escopo de bloco no Go")
	idade := 18
	
	// mensagem := "Teste"
	// fmt.Println(mensagem)

	if idade >=18 {
		mensagem := "Maior de idade"
		fmt.Println(mensagem)
	}

	var mensagem int
	mensagem = 1500

	fmt.Println(mensagem)
}
