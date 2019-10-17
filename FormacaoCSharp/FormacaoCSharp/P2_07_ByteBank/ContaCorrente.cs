namespace P2_07_ByteBank
{
    class ContaCorrente
    {
        public static int TotalDeContasCriadas { get; private set; }
        private Cliente _titular;

        public Cliente Titular
        {
            get => _titular;
            set { _titular = value; }
        }

        private int _agencia;
        public int Agencia { get => _agencia; set { if (value > 0) _agencia = value; } }
        private int _numero;
        public int Numero { get => _numero; set { if (value > 0) _numero = value; } }
        private double saldo = 100;

        public double Saldo
        {
            get => saldo;
            set
            {
                if (value > 0)
                    saldo = value;
            }
        }

        public ContaCorrente(int agencia, int numero)
        {
            Agencia = agencia;
            Numero = numero;
            TotalDeContasCriadas++;
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
", _titular.Nome, _agencia, _numero, saldo);

    }
}