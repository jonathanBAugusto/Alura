namespace P2_05_ByteBank
{
    class ContaCorrente
    {
        public Cliente titular;

        public int agencia;
        public int numero;
        public double saldo = 100;

        public bool Sacar(double valor)
        {
            if (this.saldo < valor)
            {
                return false;
            }

            this.saldo -= valor;
            return true;
        }
        public void Depositar(double valor) =>
            this.saldo += valor;

        public bool Transferir(double valor, ContaCorrente contaDestino)
        {
            if (this.saldo < valor)
                return false;

            this.saldo -= valor;
            contaDestino.Depositar(valor);

            return true;
        }

        public override string ToString() =>
             string.Format(@"
    {0}
    Agencia: {1},
    Conta: {2},
    Saldo: {3},
", this.titular.nome, this.agencia, this.numero, this.saldo);

    }
}