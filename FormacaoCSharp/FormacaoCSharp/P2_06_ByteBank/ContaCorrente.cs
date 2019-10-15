namespace P2_06_ByteBank
{
    class ContaCorrente
    {
        public Cliente titular;

        public int agencia;
        public int numero;
        private double saldo = 100;

        public double Saldo
        {
            get { return saldo; }
            set
            {
                if (value >= 0)
                    saldo = value;
            }
        }

        public bool Sacar(double valor)
        {
            if (saldo < valor)
            {
                return false;
            }

            saldo -= valor;
            return true;
        }
        public void Depositar(double valor) =>
            saldo += valor;

        public bool Transferir(double valor, ContaCorrente contaDestino)
        {
            if (saldo < valor)
                return false;

            saldo -= valor;
            contaDestino.Depositar(valor);

            return true;
        }

        public override string ToString() =>
             string.Format(@"
    {0}
    Agencia: {1},
    Conta: {2},
    Saldo: {3},
", titular.nome, agencia, numero, saldo);

    }
}