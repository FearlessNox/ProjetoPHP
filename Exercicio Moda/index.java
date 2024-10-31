public void pv_especial_15() {
    Msg.limpatela();
    Msg.msg_central("PROCESSO DE DUPLICAÇÃO DE IDs PARES");
    
    // Variável para percorrer a fila
    Noh atual = this.primeiro;
    
    // Caso a fila esteja vazia, não faz nada
    if (atual == null) {
        Msg.msg_central("Fila vazia. Nenhuma duplicação realizada.");
        return;
    }
    
    // Percorrer a fila
    while (atual != null) {
        // Verificar se o ID é par
        if (atual.getId() % 2 == 0) {
            // Criar um novo nó para duplicar o valor
            Noh duplicado = new Noh();
            duplicado.setId(atual.getId());
            duplicado.setNome(atual.getNome()); // Presumindo que a informação do nome deve ser copiada
            duplicado.setSexo(atual.getSexo()); // Presumindo que o sexo também precisa ser copiado
            duplicado.setProximo(atual.getProximo());
            
            // Inserir o nó duplicado após o nó atual
            atual.setProximo(duplicado);
            
            // Avançar para o próximo nó após a duplicação
            atual = duplicado.getProximo();
        } else {
            // Avançar para o próximo nó caso não seja par
            atual = atual.getProximo();
        }
    }
}
