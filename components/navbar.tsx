import NavbarItem from "./navbaritem";

const navbar = () => {
    return (<div className="bg-zinc-950 text-red-500 p-3 flex justify-between items-center">
        <img src="./img/Logowhite.png" className="w-36 mr-5" alt="The Artist Republic Logo" />
        <div className="hidden lg:flex">
                <NavbarItem label="Home"></NavbarItem>
                <NavbarItem label="Drawings"></NavbarItem>
                <NavbarItem label="Animations"></NavbarItem>
                <NavbarItem label="Community"></NavbarItem>
            </div>
            <div className="flex flex-row ml-auto gap-3 items-center">
                
                <NavbarItem label="Sign In"></NavbarItem>
                <NavbarItem label="Sign Up"></NavbarItem>
            </div>
    </div>);
}

export default navbar;