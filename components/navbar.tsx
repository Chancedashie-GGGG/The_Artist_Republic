import NavbarItem from "./navbaritem";
import { MdHomeFilled, MdDraw, MdAnimation, MdPerson, MdInput} from "react-icons/md";

const Navbar = () => {
    return (
        <div className="w-full p-4 flex justify-start items-center bg-zinc-900">
            <img src="./images/Logowhite.png" className="w-32 mr-5" />
            <div className="hidden lg:flex">
                <NavbarItem label="Home" icon={MdHomeFilled}></NavbarItem>
                <NavbarItem label="Drawings" icon={MdDraw}></NavbarItem>
                <NavbarItem label="Animations" icon={MdAnimation}></NavbarItem>
            </div>
            <div className="flex flex-row ml-auto gap-3 items-center">
                <NavbarItem label="Sign In" icon={MdPerson}></NavbarItem>
                <NavbarItem label="Sign Up" icon={MdInput}></NavbarItem>
            </div>
        </div>
    );
}

export default Navbar;