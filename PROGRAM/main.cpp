#include <bits/stdc++.h>
#include "petshop.cpp"

using namespace std;

int main()
{
    int i, n = 50;
    
    string id;
    string nama;
    string kategori;
    int harga;

    list<petshop> llist;

    //cin >> n; // input
    
    int choice;
    do{
        
        cout << "\nMenu:\n";
        cout << "1. Menampilkan data\n";
        cout << "2. Menambahkan data\n";
        cout << "3. Mengubah data\n";
        cout << "4. Menghapus data\n";
        cout << "5. Mencari data berdasarkan nama\n";
        cout << "6. Keluar\n";
        cout << "Pilih Fitur: \n";
        cin >> choice; 
     
        if (choice ==1){
            for(list<petshop>::iterator it = llist.begin(); it != llist.end(); it++)
                {
                    cout << it->get_id() << " | " << it->get_nama() << " | "  << it->get_kategori() << " | "  << it->get_harga() << '\n';
                    i++;
                }
        }
        
        else if (choice ==2){
            petshop temp; // pembuatan objek pada setiap proses loop

            cout << "Masukkan ID baru, Nama baru, Kategori baru, Harga baru: ";
            cin >> id >> nama >> kategori >> harga;
            temp.set_id(id);
            temp.set_nama(nama);
            temp.set_kategori(kategori);
            temp.set_harga(harga);
            llist.push_back(temp); // masukin ke dalam list
        }
        
        else if (choice == 3) {
            cout << "Masukkan Nama produk yang ingin diubah: ";
            cin >> nama;
            int found = 0;
            for (list<petshop>::iterator it = llist.begin(); it != llist.end(); it++) {
                if (it->get_nama() == nama) {
                    cout << "Masukkan ID baru, Nama baru, Kategori baru, Harga baru: ";
                    cin >> id >> nama >> kategori >> harga;
                    it->set_id(id);
                    it->set_nama(nama);
                    it->set_kategori(kategori);
                    it->set_harga(harga);
                    found = 1;
                }
            }
            if (found!=1){
                cout << "Data tidak ditemukan!\n";
            } 
        }
        
        else if (choice == 4) {
            cout << "Masukkan Nama produk yang ingin dihapus: ";
            cin >> nama;
            int found = 0;
            for (list<petshop>::iterator it = llist.begin(); it != llist.end(); it++) {
                if (it->get_nama() == nama) {
                    it = llist.erase(it);
                    found = 1;
                }
            }
            if (found!=1){
                cout << "Data tidak ditemukan!\n";
            } 
        }
        
        else if (choice == 5) {
            cout << "Masukkan Nama produk yang ingin ditampilkan: ";
            cin >> nama;
            int found = 0;
            for (list<petshop>::iterator it = llist.begin(); it != llist.end(); it++) {
                if (it->get_nama() == nama) {
                    cout << it->get_id() << " | " << it->get_nama() << " | "  << it->get_kategori() << " | "  << it->get_harga() << '\n';
                    found = 1;
                }
            }
            if (found!=1){
                cout << "Data tidak ditemukan!\n";
            } 
        }

    }while(choice!=6);

    /*for(int i = 0; i < n; i++)
    {
        petshop temp; // pembuatan objek pada setiap proses loop

        cin >> id >> nama >> kategori >> harga;
        temp.set_id(id);
        temp.set_nama(nama);
        temp.set_kategori(kategori);
        temp.set_harga(harga);
        llist.push_back(temp); // masukin ke dalam list
    }

    cout << "Iteration output : " << '\n';
    i = 0;
    for(list<petshop>::iterator it = llist.begin(); it != llist.end(); it++)
    {
        cout << (i + 1) << ". " << it->get_id() << " | " << it->get_nama() << it->get_kategori() << it->get_harga() << '\n';
        i++;
    }*/

    return 0;
}