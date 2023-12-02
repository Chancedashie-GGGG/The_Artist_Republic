import { UserButton, useUser } from "@clerk/nextjs";
import NavbarItem from "./navbaritem";

export function NavBar() {
    const user = useUser();

    return (
        <div className="bg-zinc-950 text-red-500 w-full p-3 flex justify-between items-center">
            <img src="/img/Logowhite.png" className="w-36 mr-5 hidden lg:block" alt="The Artist Republic Logo" />
            <div className="flex lg:hidden">
                <NavbarItem route="/" label="Browse"></NavbarItem>
            </div>
            <div className="hidden lg:flex">
                <NavbarItem route="/" label="Home"></NavbarItem>
                <NavbarItem route="" label="Drawings"></NavbarItem>
                <NavbarItem route="" label="Videos"></NavbarItem>
                <NavbarItem route="" label="Community"></NavbarItem>
            </div>
            <div className="flex flex-row ml-auto gap-3 items-center">
                {user.isSignedIn && (
                    <div>
                        <NavbarItem route="/upload" label="Upload"></NavbarItem>
                        <NavbarItem route="/feed" label="Feed"></NavbarItem>
                    </div>
                )};
                {!user.isSignedIn && (
                    <NavbarItem route="/sign-in" label="Sign In"></NavbarItem>
                )}
                <div>
                    <UserButton afterSignOutUrl="/" />
                </div>
            </div>
        </div>
    );
}
