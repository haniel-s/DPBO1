class petshop:
    __id = ""
    __nama = ""
    __kategori= ""
    __harga= 0

    def __init__(self, id = "", nama = "", kategori= "", harga= 0):
        self.__id = id
        self.__nama = nama
        self.__kategori = kategori
        self.__harga = harga
    
    def get_id(self):
        return self.__id
    
    def set_id(self, id):
        self.__id = id

    def get_nama(self):
        return self.__nama
    
    def set_nama(self, nama):
        self.__nama = nama

    def get_kategori(self):
        return self.__kategori
    
    def set_kategori(self, kategori):
        self.__kategori = kategori

    def get_harga(self):
        return self.__harga
    
    def set_harga(self, harga):
        self.__harga = harga