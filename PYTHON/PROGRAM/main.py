from petshop import petshop

petshops = []

i = 0
id = ""
nama = ""
kategori = ""
harga = 0
do = 1
while do != 0 :
    print("Menu:")
    print("1. Menampilkan data")
    print("2. Menambahkan data")
    print("3. Mengubah data")
    print("4. Menghapus data")
    print("5. Mencari data berdasarkan nama")
    print("6. Keluar")
    print("Pilih Fitur: ")
    method = int(input())
    if method == 1 :
        for petshop in petshops :
             print (petshop.get_id()+" | ",petshop.get_nama()+" | ",petshop.get_kategori()+" | ",petshop.get_harga())    
    elif method == 2 :
        print ("Masukkan ID baru, Nama baru, Kategori baru, Harga baru: ")
        id = input()
        nama = input()
        kategori = input()
        harga = int(input())
        petshops.append(petshop(id,nama,kategori,harga))
    elif method == 3 :
        print("Masukkan Nama produk yang ingin diubah:")
        nama = input()
        for petshop in petshops :
            if nama == petshop.get_nama():
                
                print("Masukkan ID baru, Nama baru, Kategori baru, Harga baru: ")
                id = input()
                nama = input()
                kategori = input()
                harga = int(input())

                petshop.set_id(id)
                petshop.set_nama(nama)
                petshop.set_kategori(kategori)
                petshop.set_harga(harga)
    elif method == 4 :
        print("Masukkan Nama produk yang ingin dihapus:")
        nama = input()
        for petshop in petshops :
            if nama == petshop.get_nama():
                petshops.remove(petshop)
    elif method == 5 :
        print("Masukkan Nama produk yang ingin diubah:")
        nama = input()
        for petshop in petshops :
            if nama == petshop.get_nama():
                print (petshop.get_id()+" | ",petshop.get_nama()+" | ",petshop.get_kategori()+" | ",petshop.get_harga())    
    elif method == 6 :
        do = 0