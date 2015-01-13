package myjavaeditor.Library;

import java.io.File;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.IOException;
import userinterface.Model;

public class Library {
        Model m;
        public Library(Model m){
            this.m=m;
        }
        public String dirs(){
        File f=new File(m.getWorkspace());
        String[] s=f.list();
        StringBuilder sb=new StringBuilder();
        for(String a:s){
            sb.append(a);
            sb.append("\n");
        }
        return sb.toString();        
    }
    public void delete(String filename){
        File f=new File(filename);
        f.delete();
    }
    public void save() throws FileNotFoundException, IOException{
        String filename=m.getWorkspace()+m.getFilename();
        FileOutputStream fout=new FileOutputStream(filename);
        String s=m.getContent();
        fout.write(s.getBytes());
        fout.close();
    }
    public void create() throws FileNotFoundException, IOException{
    FileOutputStream fout=new FileOutputStream(m.getWorkspace()+m.getFilename());
    open(m.getFilename());
    fout.close();
    }
    
    public void open(String filename) throws FileNotFoundException, IOException{
        StringBuilder sb=new StringBuilder();
        FileInputStream fin=new FileInputStream(m.getWorkspace()+filename);
        int a;
        while((a=fin.read())!=-1){
            sb.append((char)a);
        }
        m.setContent(sb.toString());
        m.setFilename(filename);
    }
    public String help(){
        String s="Welcome to Jitor v1.0 Beta  Help @yashdeep hinge\n"
                + "open : open a file with given filename\n"
                + "start : starts an application thats name given\n"
                + "close : close the application\n"
                + "save : save the file currently open\n"
                + "workspace: sets the workspace\n"
                + "create : create a file with the given name\n"
                + "dir :lists all the files available in current directory\n"
                + "delete: deletes the filename given to it\n\n"
                + "Shift+Z: to shift the focuses\n"
                + "\n"
                + "Jittor is in beta now also so please use it with care.\n"
                + "Things to be added\n"
                + "codechef: problem solution submition";
        return s;
    }
}
