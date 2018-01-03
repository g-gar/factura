#include <sstream>
#include <iostream>
#include <string>

using namespace std;

void print(string text) {
	cout << text;
}

void println(string text) {
	cout << text << endl;
}

struct Persona {
	string nombre;
	Persona() : nombre("")
	{}
	Persona(string _nombre) : nombre(_nombre)
	{}
	string get_nombre(){ return nombre; }

	template <typename function>
	void execute(function fn) {
		fn(nombre);
	}
};

class Factura {
private:
protected:
public:
	string titulo;
	double cantidad;
	Factura() : titulo(), cantidad() {}
	Factura(string _titulo) : titulo(_titulo), cantidad() {}
	Factura(string _titulo, double _cantidad) : titulo(_titulo), cantidad(_cantidad) {}
	~Factura() {}
	string get_titulo() { return titulo; }
	double get_cantidad() { return cantidad; }
};