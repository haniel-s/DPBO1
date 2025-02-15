#include <iostream>
#include <string>

using namespace std;

class petshop{
	private :
		string id;
        string nama;
        string kategori;
        int harga;
        
	public : 
        petshop(){
			this->id = "";
            this->nama = "";
            this->kategori = "";
            this->harga = 0;
		}

        petshop(string id,string nama,string kategori, int harga)
        {
            this->id = id;
            this->nama = nama;
            this->kategori = kategori;
            this->harga = harga;
        }
        
        string get_id()
        {
            return this->id;
        }
        
        void set_id(string id)
        {
            this->id = id;
        }
        
        string get_nama()
        {
            return this->nama;
        }
        
        void set_nama(string nama)
        {
            this->nama = nama;
        }
        
        string get_kategori()
        {
            return this->kategori;
        }
        
        void set_kategori(string kategori)
        {
            this->kategori = kategori;
        }

        int get_harga()
        {
            return this->harga;
        }
        
        void set_harga(int harga)
        {
            this->harga = harga;
        }
        
        ~petshop(){
		}
};