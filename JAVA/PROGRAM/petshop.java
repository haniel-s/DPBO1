public class petshop{
    private String id;
    private String nama;
    private String kategori;
    private int harga;

    public petshop(){
        this.id="";
        this.nama="";
        this.kategori="";
        this.harga=0;
    }
    
    public petshop(String id,String nama,String kategori,int harga){
        this.id= id;
        this.nama=nama;
        this.kategori=kategori;
        this.harga=harga;
    }

    public String getNama(){
        return this.nama;
    }
    public void setNama(String nama){
        this.nama = nama;
    }
    
    public String getid(){
        return this.id;
    }
    public void setid(String id){
        this.id = id;
    }
    
    public String getkategori(){
        return this.kategori;
    }
    public void setkategori(String kategori){
        this.kategori = kategori;
    }

    public int getharga(){
        return this.harga;
    }
    public void setharga(int harga){
        this.harga = harga;
    }
    
    // gapake destructor crodiiiiieeeeeeeeee
}