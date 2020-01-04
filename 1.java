public class Main {

    public static void main(String[] args) {
        // TODO code application logic here
        
        double kura = 9999;
        
        double total[] = new double[10];
        
        
        
        int hari =90;
        int bulan = 90/30;
        while (bulan <= 13) {
            double mati = Math.round(kura * (21.1 /100));
            double hasil = (kura - mati) * 2;
            
            System.out.println(hasil); 
            kura = hasil;
            
            bulan = bulan + 3;
            
        }

    }