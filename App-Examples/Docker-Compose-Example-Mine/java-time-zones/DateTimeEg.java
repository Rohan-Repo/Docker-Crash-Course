import java.time.ZoneId;
import java.time.ZonedDateTime;
import java.time.format.DateTimeFormatter;

public class DateTimeEg {
    public static void main(String[] args) {

        // System.out.println("ZoneId.getAvailableZoneIds()  = " + ZoneId.getAvailableZoneIds() );

        System.out.println( "\n Start of Java Code" );

        ZonedDateTime currDateTime = ZonedDateTime.now();
        ZoneId zoneTor = ZoneId.of( "America/Toronto" );
        ZoneId zoneNY = ZoneId.of( "America/New_York" );
        ZoneId zoneVanSF = ZoneId.of("Canada/Pacific");
        ZoneId zoneIndia = ZoneId.of( "Asia/Kolkata" );
        ZoneId zoneNepal = ZoneId.of( "Asia/Kathmandu" );

        ZonedDateTime timeTor = currDateTime.withZoneSameInstant( zoneTor );
        ZonedDateTime timeNY = currDateTime.withZoneSameInstant( zoneNY );
        ZonedDateTime timeVanSF = currDateTime.withZoneSameInstant( zoneVanSF );
        ZonedDateTime timeIndia = currDateTime.withZoneSameInstant( zoneIndia );
        ZonedDateTime timeNepal = currDateTime.withZoneSameInstant( zoneNepal );

        DateTimeFormatter formatter = DateTimeFormatter.ofPattern( "yyyy-MMM-dd HH:mm:ss z" );

        System.out.println( "\n -- Time Information -- " );
        System.out.println( "Time in Toronto : " + timeTor.format(formatter) );
        System.out.println( "Time in NewYork : " + timeNY.format(formatter) );
        System.out.println( "Time in Vancouver/San-Francisco : " + timeVanSF.format(formatter) );
        System.out.println( "Time in India : " + timeIndia.format(formatter) );
        System.out.println( "Time in Nepal : " + timeNepal.format(formatter) );

        System.out.println( "\n End of Java Code" );
    }
}
