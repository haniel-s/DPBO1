import java.util.ArrayList;
import java.util.Scanner;

public class Main{
    public static void main(String[] args){
        // self note 
        // kenapa harus new ? buat ngasi tau kalo kita mau bikin kelas petshop baru
        // bukan di assign variable laen yang adalah petshop juga dll tapi bener2 baru
        //cth : petshop pet = new petshop();
        
        ArrayList<petshop> list = new ArrayList<>();
        
        int i;
        String id;
        String nama;
        String kategori;
        int harga;

        int method;
        Scanner sc = new Scanner(System.in);
        do{
            System.out.println("Menu:");
            System.out.println("1. Menampilkan data");
            System.out.println("2. Menambahkan data");
            System.out.println("3. Mengubah data");
            System.out.println("4. Menghapus data");
            System.out.println("5. Mencari data berdasarkan nama");
            System.out.println("6. Keluar");
            System.out.println("Pilih Fitur: ");
            
            
            method = sc.nextInt();

            if (method == 1){
                if (list.size()!=0){   
                    for (i=0;i<list.size();i++){
                        System.out.println(list.get(i).getid()+" | "+list.get(i).getNama()+" | "+list.get(i).getkategori()+" | "+list.get(i).getharga());
                    }
                }
                else {
                        System.out.println("list kosong");
                }
            }
            else if (method == 2){   
                System.out.println("Masukkan ID baru, Nama baru, Kategori baru, Harga baru: ");
                id = sc.next();
                nama = sc.next(); 
                kategori = sc.next(); 
                harga = sc.nextInt();
                
                petshop pet=new petshop();
                
                pet.setid(id);
                pet.setNama(nama);
                pet.setkategori(kategori);
                pet.setharga(harga);

                list.add(pet);
            }
            else if (method == 3){
                System.out.println("Masukkan Nama produk yang ingin diubah:");
                String change=sc.next();
                
                for (i=0;i<list.size();i++){
                    if (change.equals(list.get(i).getNama())){
                        
                        System.out.println("Masukkan ID baru, Nama baru, Kategori baru, Harga baru: ");
                        
                        id = sc.next();
                        nama = sc.next(); 
                        kategori = sc.next(); 
                        harga = sc.nextInt();
                        
                        list.get(i).setid(id);
                        list.get(i).setNama(nama);
                        list.get(i).setkategori(kategori);
                        list.get(i).setharga(harga);

                    }
                }   
            }
            else if (method == 4){
                System.out.println("Masukkan Nama produk yang ingin dihapus:");
                String change=sc.next();
                
                for (i=0;i<list.size();i++){
                    if (change.equals(list.get(i).getNama())){
                        list.remove(i);
                    }
                }  
            }
            else if (method == 5){
                System.out.println("Masukkan Nama produk yang ingin ditampilkan:");
                String change=sc.next();
                
                for (i=0;i<list.size();i++){
                    if (change.equals(list.get(i).getNama())){
                        System.out.println(list.get(i).getid()+" | "+list.get(i).getNama()+" | "+list.get(i).getkategori()+" | "+list.get(i).getharga());
                    }
                }
            }
            
        }while(method != 6);
        sc.close();
        
    }
}
