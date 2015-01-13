package myjavaeditor.Library;


import java.io.FileNotFoundException;
import java.io.IOException;
import java.util.StringTokenizer;
import userinterface.Model;

public class CommandProcessor {
    Model m;    
    public Library l;
    
    public CommandProcessor(Model model){
        m=model;
        l=new Library(m);
    }
    
    public void process(String command) throws FileNotFoundException, IOException{
        StringTokenizer st=new StringTokenizer(command);
        String keyword=st.nextToken();
        if("open".equals(keyword)){
            l.open(st.nextToken());
        }
        if("close".equals(keyword)){
            m.persistModel();
            System.exit(1);
        }
        if("save".equals(keyword)){
            l.save();
        }
        if("create".equals(keyword)){
            m.setFilename(st.nextToken());
            l.create();
        }
        if("workspace".equals(keyword)){
            m.setWorkspace(st.nextToken());
        }
        if("dir".equals(keyword)){
            m.setContent(l.dirs());
        }
        if("delete".equals(keyword)){
            l.delete(st.nextToken());
        }
        if("start".equals(keyword)){
            ProcessBuilder p=new ProcessBuilder(st.nextToken());
            Process pf=p.start();
        }
        if("help".equals(keyword)){
            m.setContent(l.help());
        }
    }
}
