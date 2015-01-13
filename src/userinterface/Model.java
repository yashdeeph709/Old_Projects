package userinterface;

import java.io.File;
import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;
import java.util.StringTokenizer;

public class Model {
    private String content;
    private String workspace="C:\\";
    private String filename="config.txt";
    
    public Model() throws FileNotFoundException, IOException{
        int a;
        File file=new File("C:\\config.txt");
        if(file.exists()){
            FileReader fr=new FileReader(file);
            StringBuilder sb=new StringBuilder();
            while((a=fr.read())!=-1){
                sb.append((char)a);
            }
            StringTokenizer st=new StringTokenizer(sb.toString());
            if(st.hasMoreTokens()){
               String s=st.nextToken();
               setWorkspace(s);
              }
            if(st.hasMoreTokens()){
               String s=st.nextToken();
               setFilename(s);
              }
        }
    }
       
    public String getWorkspace() {
        return workspace;
    }

    public void setWorkspace(String workspace) {
        this.workspace = workspace+"\\";
    }
    
    public String getContent(){
        return content;
    }
    public void setContent(String content){
        this.content=content;
    }
    public String getFilename(){
        return filename;
    }
    public void setFilename(String filename){
        this.filename=filename;
    }
    public void persistModel() throws IOException{
        try (FileWriter fw = new FileWriter("C:\\config.txt")) {
            fw.write(getWorkspace());
            fw.write(" "+getFilename());
            fw.flush();
        }        
    }
    
}
