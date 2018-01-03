
#include "main.h"

int main() {
	//print("Hola");
	// Persona p = Persona();
	// println(p.get_nombre());
	// Persona p1 = Persona("juan");
	// println(p1.get_nombre());
	// p1.execute([](string nombre){println(nombre);});


	Factura *f = new Factura("Factura 1");
	println(f->get_titulo());
	string s = f->titulo;
	delete f;
	println(s);

	return 0;
}