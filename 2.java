public class Main {

    public static void main(String[] args) {
        // TODO code application logic here

    //dik :
    
        double jarak = 64.5;
        double jarakM = 64.5 * 1000;
        
    // kecepatan pertama, waktu dan jarak tempuhnya 
    
        double menitSatu = 23;
        double detikSatu = menitSatu * 60;
        double kecSatu = 3;
        double jtSatu = kecSatu * detikSatu;
    
    // kecepatan kedua, waktu dan jarak tempuhnya
        double menitDua = 12;
        double detikDua = menitDua * 60;
        double kecDua = 5;
        double jtDua = kecDua * detikDua;
        
    // kecepatan ketiga, waktu dan jarak tempuhnya
        double detikTiga = 0;
        double kecTiga = kecDua - kecSatu;
        double jtTiga =  jarakM - jtSatu - jtDua;
        detikTiga = jtTiga / kecTiga;
        
    // mencari waktu total yang ditempuh
        double detikTotal = detikSatu + detikDua + detikTiga;
        double menitTotal = detikTotal / 60;
        
    // menampilkan menit jam dan detik
        double menit = menitTotal % 60;
        double jam = (menitTotal - menit) / 60;
        double detik = (menitTotal - menit) % 60; 
        
        
        
    // Output nya
        System.out.println("Waktu yang dibutuhkan : ");
        System.out.println(jam + " Jam " + menit + " menit " + detik + " detik");

        
        
        

    }